<?php
	//重新编写了配置文件和数据库操作文件，以便后期维护
	require dirname(__FILE__)."/DBConfig.php";		//引入配置文件
	class DB{
		public $mysqli = null;
		
		//构造函数
		public function __construct($dbconfig){
			$this->mysqli = new mysqli($dbconfig['host'], $dbconfig['user'], $dbconfig['pass'], $dbconfig['db']);
			if ($this->mysqli->connect_error) {  
				die('Connect Error (' . $this->mysqli->connect_errno . ') '. $this->mysqli->connect_error);  
			}  
			$this->mysqli->query("SET names ".$dbconfig['charset']);
		}
		
		//查询函数，根据传入sql语句，返回结果集(查询)，或者结果(增删改)
		public function getResult($sql){
			$res = $this->mysqli->query($sql) or die($this->mysqli->error);
			if(gettype($res)=="boolean"){
				//$res->close();
				if(!$res){
					return 0; //增删改失败
				}else{
					if($this->mysqli->affected_rows>0){
						return 1;//表示成功
					}
					else{
						return 2;//表示没有影响行数
					}
				}
			}else{
				$res_array = $res->fetch_all(MYSQLI_ASSOC);
				$res->close();
				return $res_array;		//返回是一个二维数组
			}
		}
		
		//根据小区名称comm查询数据
		public function getDataByComm($comm){
			$sql = "select title,community_name,price,area,total_price,spatial_arrangement,floor_index,total_floor,builded_year,advantage,".
				"details_url FROM for_sale_property AS a JOIN (SELECT id FROM for_sale_property FORCE INDEX".
				" (date_index) ORDER BY first_acquisition_time DESC LIMIT 0,300000) AS b WHERE a.id=b.id AND a.community_name like '%".$comm."%'";
			$res = self::getResult($sql);
			return $res;
		}
		
		//关闭数据库
		public function closeDB(){
			$this->mysqli->close();
		}
	}
?>