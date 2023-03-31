<?php

namespace App\Models;

use PDO;
use PDOException;

class BaseModel
{
    protected $conn;
    protected $sqlBuilder;
    protected $tableName;
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost; dbname=asm_php2; charset=utf8", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw $e;
        }
    }

    /**
     * function all(): lấy ra toàn bộ dữ liệu của bảng
     */
    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName";
        // echo $model->sqlBuilder;
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    /**
     * function insert: thêm dữ liệu
     * params: $data có cấu trúc
     * $data = [firtname=>'Bùi', lastname=>'Ngọc', ... ]
     */
    public function insert($data = [])
    {
        $this->sqlBuilder = "INSERT INTO $this->tableName(";

        $colNames = '';
        $params = '';

        //Lấy tên cột, và tên tham số từ mảng data
        foreach ($data as $key => $value) {
            $colNames .= "`$key`, ";
            $params .= ":$key, ";
        }

        //Loại bỏ dấu ', ' ở cuối chuỗi
        $colNames = rtrim($colNames, ', ');
        $params = rtrim($params, ', ');

        //Nối vào câu lệnh SQL
        $this->sqlBuilder .= $colNames . ") VALUES(" . $params . ")";

        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($data);
    }
    /**
     * function findOne($id)
     * Hàm sẽ lấy ra 1 bản ghi theo id
     */
    public static function findOne($id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE id='$id'";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        //Nếu có dữ liệu
        if ($result) {
            return $result[0];
        }
        return $model;
    }
    /**
     * function update: cập nhật dữ liệu
     * @param $arrs: là mảng dữ liệu cần cập nhật
     */
    public function update($arrs = [])
    {
        $this->sqlBuilder = "UPDATE $this->tableName SET ";
        foreach ($arrs as $key => $value) {
            $this->sqlBuilder .= "`$key`=:$key, ";
        }
        $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
        $this->sqlBuilder .= " WHERE id=:id";
        //$this->id lấy từ hàm findOne
        if (isset($this->id)) {
            $arrs['id'] = $this->id;
            $stmt = $this->conn->prepare($this->sqlBuilder);
            $stmt->execute($arrs);
            return true;
        }
        return false;
    }

    public function delete($id)
    {
        $this->sqlBuilder = "DELETE FROM $this->tableName WHERE id='$id'";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
    }
    /**
     * function where()
     * @param $colName: tên cột
     * @param $codition: điều kiện
     * @param $value: giá trị
     */
    public function where($colName, $codition, $value)
    {
        $this->sqlBuilder .= " WHERE `$colName` $codition '$value' ";
        return $this;
    }

    public function andWhere($colName, $codition, $value)
    {
        $this->sqlBuilder .= " AND `$colName` $codition '$value' ";
        return $this;
    }
    public function orWhere($colName, $codition, $value)
    {
        $this->sqlBuilder .= " OR `$colName` $codition '$value' ";
        return $this;
    }
    public function orderBy($colName, $value)
    {
        $this->sqlBuilder = "SELECT * FROM $this->tableName order by `$colName` $value";
        return $this;
    }
    public function limit($start, $limit)
    {
        $this->sqlBuilder .= " LIMIT $start, $limit";
        return $this;
    }
    public function joinTable($table)
    {
        $this->sqlBuilder .= " JOIN $table";
        return $this;
    }
    public function on($value1, $value2)
    {
        $this->sqlBuilder .= " ON $value1 = $value2";
        return $this;
    }
    public function selectTable($valueSelect)
    {
        $this->sqlBuilder = "SELECT $valueSelect FROM $this->tableName";
        return $this;
    }

    /**
     * function get: lấy dữ liệu từ câu lệnh where
     */
    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}
