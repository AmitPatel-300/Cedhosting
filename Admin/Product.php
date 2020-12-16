<?php
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
    /**
     * Function for dbcon
     */
    public function __construct()
    {
        $con=new Dbcon(); 
        $this->conn=$con->connect();
    }
    /**
     * Function for dbcon
     * 
     * @return hostinglist()
     */
    public function hostinglist() 
    {
        $sql="SELECT * from tbl_product where `prod_parent_id`=1 and `prod_available`=1" ;
            $result = $this->conn->query($sql);
                if ($result->num_rows>0) {
                    while ($rows=$result->fetch_assoc()) {
                        $this->rows[]=$rows;
                }
                $output  = json_encode($this->rows);
            } else {
                $output = "Error: " . $sql . "<br>" . $this->conn->error;
            }

            return $output; 
    } 

    /**
     * Function for dbcon
     * 
     * @return hostinglist()
     */
    public function parent_product() 
    {
        $sql="Select * from `tbl_product` where `prod_parent_id`=0";
         $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                $name=$rows['prod_name'];  
            }
        }
        return $name;
    }
    /**
     * Function for dbcon
     * 
     * @param name $name comment
     * @param ava  $ava  comment
     * 
     * @return hostinglist()
     */
    public function Addcategory($name, $ava) 
    {
        $sql="Select * from tbl_product where `prod_name`='$name'";
        $result=$this->conn->query($sql);
        $this->count=$result->num_rows;
        if ($this->count>0) {
            return 0;
        } else {
            $sql ="INSERT INTO tbl_product(`prod_parent_id`,`prod_name`, `html`,`prod_available`,`prod_launch_date`)
            VALUES ('1','$name',NULL, '$ava',NOW())";
            if ($this->conn->query($sql) === true ) {
                return 1;// return "New record created successfully";
            } else {
                return "Error: " . $sql . "<br>" . $this->conn->error;
            }
        }
    }

    /**
     * Function for dbcon
     * 
     * @return hostinglist()
     */
    public function showcategory()
    {
        $sql="Select * from tbl_product where `prod_parent_id`=1";
           $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                $this->rows[]=$rows;

            }   
        }
          return json_encode($this->rows);
    }
    
    /**
     * Function for dbcon
     * 
     * @param id $id comment 
     * 
     * @return deleteCategory()
     */
    public function deleteCategory($id) 
    {
        $sql="Delete  from `tbl_product` where id='$id'";
        if ($this->conn->query($sql) === true) {
            return 1;
        } else {
              echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    /**
     * Function for dbcon
     * 
     * @param id $id comment 
     * 
     * @return editCategory()
     */
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

    /**
     * Function for dbcon
     * 
     * @param id   $id   comment
     * @param name $name comment
     * @param ava  $ava  comment
     * @param link $link comment
     * 
     * @return updateCategory()
     */
    public function updateCategory($id, $name, $ava, $link)
    {
        $sql= "UPDATE `tbl_product` SET `prod_name`='$name' ,`prod_available`='$ava',`html`='$link' WHERE `id` ='$id'";
        if ($this->conn->query($sql) === true) {
            return 1;
        } else {
                return "Error updating record: " . $this->conn->error;
        }
    }
    
    /**
     * Function for dbcon
     * 
     * @param prodid $prodid comment
     * @param pname  $pname  comment 
     * @param plink  $plink  comment
     * @param mprice $mprice comment
     * @param aprice $aprice comment 
     * 
     * @return deleteCategory()
     */
    public function AddMultiple($prodid, $pname, $plink, $mprice, $aprice, $sku, $prod_desc_encode) 
    {
        $sql = " INSERT INTO tbl_product(`prod_parent_id`,`prod_name`, `html`,`prod_available`,`prod_launch_date`)
        VALUES ('$prodid','$pname','$plink','1',NOW())";
        if ($this->conn->query($sql) === true ) {
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
    //show product 

    public function ShowProductsDesc()
    {
        $sql="SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`";
           $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                $this->rows[]=$rows;

            }   
            return json_encode($this->rows);
        }
        return "Error: " . $sql . "<br>" . $this->conn->error;
            
    }

      //Product deletion
      public function MultiProductsdelete($id)
      {
        $sql="DELETE `tbl_product`, `tbl_product_description`
        FROM `tbl_product`
        INNER JOIN `tbl_product_description` ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`
        WHERE `prod_id`='$id'";
        if ($this->conn->query($sql) === true) {
            return 1;
        } else {
                echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

    }

 //edit Product
    public function editProduct($id) 
    {
       
        $sql="SELECT * FROM `tbl_product` INNER JOIN `tbl_product_description` ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `prod_id`='$id'";
        $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                    $this->rows[]=$rows;

            }   
        }
        return json_encode($this->rows);
    }

    //show parent category

    public function ShowParentCategory() 
    {
        $sql="SELECT * from tbl_product where `prod_parent_id`=1";
        $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                    $this->rows[]=$rows;

            }   
        }
        return json_encode($this->rows);

    }

    public function updateProduct($id,$prodcat, $prodname, $plink, $mprice, $aprice, $sku ,$prod_desc_encode)
    {
        $sql= "UPDATE `tbl_product` SET `prod_parent_id`='$prodcat' ,`prod_name`='$prodname',`html`='$plink' WHERE `id` ='$id'";
        if ($this->conn->query($sql) === true) {
            $sql2="UPDATE `tbl_product_description` SET `description`='$prod_desc_encode',`mon_price`='$mprice',`annual_price`='$aprice',`sku`='$sku' WHERE `prod_id` ='$id'";
            if ($this->conn->query($sql2) === true) {
                return 1;
            } else {
                return "Error updating record: " . $this->conn->error;
            }
        } else {
            return "Error updating record: " . $this->conn->error;
        }
    }
    //parent product

    public function ParentProduct()
    {
        $rows2=array();
        $sql="SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`";
           $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                $id=$rows['prod_parent_id'];
                $sql2="SELECT * from tbl_product where `id`=$id";
                $result2=$this->conn->query($sql2);
                if ($result2->num_rows>0) {
                    while ($rows1=$result2->fetch_assoc()) {
                          $rows2[]=$rows1;
                    }
                } else {
                     return "Error: " . $sql . "<br>" . $this->conn->error;
                }
                
            }
            return json_encode($rows2);
        } else {
                return "Error: " . $sql . "<br>" . $this->conn->error;    
        }    
    }

    //product details
    public function getdetailpage($id)
    {
        $rows2=array();
        $sql="SELECT `tbl_product`.*,`tbl_product_description`.* 
        FROM tbl_product JOIN tbl_product_description ON 
            `tbl_product`.`id` = `tbl_product_description`.`prod_id`
            WHERE `tbl_product`.`prod_parent_id`='$id'";
            $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                $rows2[]=$rows;

            }   
            return $rows2;
        }
        return "Error: " . $sql . "<br>" . $this->conn->error;
    }

    //prodparent
    public function parentdetail($pid)
    {
        $rows1=array();
        $sql="SELECT *  FROM `tbl_product` where `id`='$pid'";
        $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                $rows1[]=$rows;
            }   
            return $rows1;
        }
        return "Error: " . $sql . "<br>" . $this->conn->error;
    }

}


