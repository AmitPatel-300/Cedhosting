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
require_once 'Product.php';
$product=new Product();
$action= $_POST['ACT'];  
switch($action) {
case 'Addcategory':
    $name=$_POST['Name'];
    $ava=$_POST['Ava'];
    $data= $product-> Addcategory($name, $ava);
     echo $data;
    break;   

case 'showcategory':
    $data= $product-> showcategory();
        echo $data;
    break;  

case 'deleteCategory':
    $id=$_POST['Id'];
    $data= $product->deleteCategory($id);
    echo $data;
    break;   
}


?>