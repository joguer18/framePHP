<?php 


class productController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$objproducto = $this->loadModel('product');
		
		$this->_view->productos = $objproducto->getAllProduct();
		
		$this->_view->setJs(array('index'));
		$this->_view->renderizar('index');

	}

	public function editar($productCode){
		
		$objproducto = $this->loadModel('product');
		$this->_view->producto = $objproducto->getProducto($productCode);
		
		$this->_view->renderizar('editar');
		
		
	}
	
	public function grabarproducto(){
	
		$productCode = trim($_POST['productCode']);
		$productName = trim($_POST['productName']);
		$productLine = trim($_POST['productLine']);
		$productScale = trim($_POST['productScale']);
		$productVendor = trim($_POST['productVendor']);
		$productDescription = trim($_POST['productDescription']);
		$quantityInStock = trim($_POST['quantityInStock']);
		$buyPrice = trim($_POST['buyPrice']);
		$MSRP = trim($_POST['MSRP']);
		
		$objproducto = $this->loadModel('product');
		
		$objproducto->updateProducto($productCode,$productName,$productLine,$productScale,$productVendor,$productDescription,$quantityInStock,$buyPrice,$MSRP);
		$this->redireccionar('product/index');
	
	}
	
	//Agregar un nuevo producto: Mostrando el formulario
	public function nuevo(){
	
		$objproducto = $this->loadModel('product');
		//$this->_view->producto = $objproducto->getProducto($productCode);
		
		$this->_view->renderizar('nuevo');
	
	}
	
	//Agregar un nuevo producto: Guardando en base de datos
	public function addproducto(){
	
		$productCode = trim($_POST['productCode']);
		$productName = trim($_POST['productName']);
		$productLine = trim($_POST['productLine']);
		$productScale = trim($_POST['productScale']);
		$productVendor = trim($_POST['productVendor']);
		$productDescription = trim($_POST['productDescription']);
		$quantityInStock = trim($_POST['quantityInStock']);
		$buyPrice = trim($_POST['buyPrice']);
		$MSRP = trim($_POST['MSRP']);
		
		$objproducto = $this->loadModel('product');
		
		$objproducto->insertProducto($productCode,$productName,$productLine,$productScale,$productVendor,$productDescription,$quantityInStock,$buyPrice,$MSRP);
		$this->redireccionar('product/index');
	
	}
	
	//Borrado lógico
	public function borrar($productCode){
	
		$objproducto = $this->loadModel('product');
		$objproducto->delProducto($productCode);
	
		$this->redireccionar('product/index');
	
	
	}

}


?>