<?php
/**
 * Template File Doc Comment
 * 
 * PHP version 7
 *
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

/**
 * Template Class Doc Comment
 * 
 * Template Class
 * 
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
?>
<?php
require_once 'Dbcon.php';
class Product
    {
    public $conn;
    public $name;
    public $rows;
    
    public function __construct()
    {
        $con=new Dbcon(); 
        $this->conn=$con->connect();
    }

 
   
    public function hostinglist() {
        $sql="Select * from tbl_product where `prod_parent_id`=1";
            $result = $this->conn->query($sql);
                if($result->num_rows>0) {
                    while($rows=$result->fetch_assoc()){
                        $this->rows[]=$rows;
                }
            }
            return json_encode($this->rows);
    } 


    public function parent_product() 
    {
        $sql="Select * from `tbl_product` where `prod_parent_id`=1";
         $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                $name=$rows['prod_name'];  
            }
        }
        return $name;
    }

    public function Addcategory($name, $ava) 
    {
        $sql = " INSERT INTO tbl_product(`prod_parent_id`,`prod_name`, `link`,`prod_available`,`prod_launch_date`)
        VALUES ('1','$name', NULL, '$ava',NOW())";
        if ($this->conn->query($sql) === true ) {
            return 1;// return "New record created successfully";
          } else {
            return 0;//echo "Error: " . $sql . "<br>" . $this->conn->error;
          }
    }


    public function showcategory()
    {
        $sql="Select * from tbl_product where `id`!=1";
           $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            $arr['data']=array();
            while ($rows=$result->fetch_assoc()) {
                $this->rows[]=$rows;

            }   
        }
          return json_encode($this->rows);
    }
     //category deletion
    public function deleteCategory($id) 
    {
        $sql="Delete  from `tbl_product` where id='$id'";
        if ($this->conn->query($sql) === true) {
            return 1;
        } else {
              echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

   //edit category
    public function editCategory($id) 
    {
       
        $sql="Select * from tbl_product where `id`=$id";
        $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
                $arr['data']=array();
            while ($rows=$result->fetch_assoc()) {
                    $this->rows[]=$rows;

            }   
        }
        return json_encode($this->rows);
    }

    public function updateCategory($id, $name, $ava, $link)
    {
        $sql= "UPDATE `tbl_product` SET `prod_name`='$name' ,`prod_available`='$ava',`link`='$link' WHERE `id` ='$id'";
        if ($this->conn->query($sql) === true) {
            return 1;
        } else {
                return "Error updating record: " . $this->conn->error;
        }
    }

    public function AddMultiple($prodid, $pname, $plink, $mprice, $aprice, $sku, $prod_desc_encode) 
    {
        $sql = " INSERT INTO tbl_product(`prod_parent_id`,`prod_name`, `link`,`prod_available`,`prod_launch_date`)
        VALUES ('$prodid','$pname','$plink','1',NOW())";
        if ($this->conn->query($sql) === TRUE ) {
            $last_id = $this->conn->insert_id;
            $sql = " INSERT INTO tbl_product_description(`prod_id`,`description`,`mon_price`,`annual_price`,`sku`)
            VALUES ('$last_id','$prod_desc_encode','$mprice','$aprice','$sku')";
            if ($this->conn->query($sql) == true ) {
                return 1;
              } else {
                return "Error: " . $sql . "<br>" . $this->conn->error;
              }
           
          } else {
            return  "Error: " . $sql . "<br>" . $this->conn->error;
          }
    }
}


