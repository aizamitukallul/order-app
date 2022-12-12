<aside class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div> <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> </div>
		<div>
			<h4 class="logo-text">Zahir C&C </h4> </div>
		<div class="toggle-icon ms-auto"> <i class="bi bi-list"></i> </div>
	</div>
	<!--navigation-->
	<ul class="metismenu" id="menu">
		<li>
			<a href="index.php">
				<div class="parent-icon"><i class="bi bi-house-fill"></i> </div>
				<div class="menu-title">Dashboard</div>
			</a>
		</li>		
		<li class="menu-label">Operation</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bi bi-droplet-fill"></i> </div>
				<div class="menu-title">Warehouse</div>
			</a>
			<ul>
				<li> <a href="goods_receive.php"><i class="bi bi-circle"></i>Receive Stock</a> </li>
				<li> <a href="customer_order.php"><i class="bi bi-circle"></i>Customer Invoice</a> </li>
				<li> <a href="fish_receive.php"><i class="bi bi-circle"></i>Receive Fish</a> </li>
				<li> <a href="fish_order.php"><i class="bi bi-circle"></i>Fish Invoice</a> </li>
			</ul>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="lni lni-cart"></i> </div>
				<div class="menu-title">Zahir</div>
			</a>
			<ul>
				<li> <a href="inventory_cc.php"><i class="bi bi-circle"></i>Cash & Curry</a> </li>
				<li> <a href="inventory_mini.php"><i class="bi bi-circle"></i>Minimarkado</a> </li>				
			</ul>
		</li>
		<li>
			<a href="credit_customer.php">
				<div class="parent-icon"><i class="lni lni-euro"></i> </div>
				<div class="menu-title">Credit Customer</div>
			</a>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="lni lni-cog"></i> </div>
				<div class="menu-title">Setup</div>
			</a>
			<ul>
				<li> <a href="add_prolduct.php"><i class="bi bi-circle"></i>Add Products</a> </li>
				<li> <a href="add_supplier.php"><i class="bi bi-circle"></i>Add Supplier</a> </li>
				<li> <a href="add_customer.php"><i class="bi bi-circle"></i>Add Customer</a> </li>
				<li> <a href="add_card.php"><i class="bi bi-circle"></i>Issue Card</a> </li>
				<!--<li> <a href="ecommerce-orders-detail.html"><i class="bi bi-circle"></i>Order details</a> </li>
				<li> <a href="ecommerce-add-new-product.html"><i class="bi bi-circle"></i>Add New Product</a> </li>
				<li> <a href="ecommerce-add-new-product-2.html"><i class="bi bi-circle"></i>Add New Product 2</a> </li>
				<li> <a href="ecommerce-transactions.html"><i class="bi bi-circle"></i>Transactions</a> </li>-->
			</ul>
		</li>
		
		<li class="menu-label">Reports</li>
		<li>
			<a href="view_inventory_report.php">
				<div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i> </div>
				<div class="menu-title">Product Inventory</div>
			</a>
		</li>
		<li>
			<a href="view_fish_inventory_report.php">
				<div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i> </div>
				<div class="menu-title">Fish Inventory</div>
			</a>
		</li>
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i> </div>
				<div class="menu-title">Stock</div>
			</a>
			<ul>
				<li> <a href="view_stock.php"><i class="bi bi-circle"></i>Stock Receive</a> </li>
				<li> <a href="search_stock_report.php"><i class="bi bi-circle"></i>Search Stock</a> </li>				
			</ul>
		</li>
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i> </div>
				<div class="menu-title">Invoice</div>
			</a>
			<ul>
				<li> <a href="view_invoice.php"><i class="bi bi-circle"></i>Customer Invoice</a> </li>
				<li> <a href="view_invoice.php"><i class="bi bi-circle"></i>Search</a> </li>
			</ul>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="lni lni-shopping-basket"></i> </div>
				<div class="menu-title">Own Business</div>
			</a>
			<ul>
				<li> <a href="view_zahircc.php"><i class="bi bi-circle"></i>Zahir C&C</a> </li>
				<li> <a href="view_zahirminimarkado.php"><i class="bi bi-circle"></i>Zahir Minimarkado</a> </li>				
			</ul>
		</li>
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i> </div>
				<div class="menu-title">Misc</div>
			</a>
			<ul>
				<li> <a href="expire_product_report.php"><i class="bi bi-circle"></i>Product Expire</a> </li>
				<li> <a href="view_customer.php"><i class="bi bi-circle"></i>Customer</a> </li>
				<li> <a href="view_product.php"><i class="bi bi-circle"></i>Product</a> </li>
				<li> <a href="view_supplier.php"><i class="bi bi-circle"></i>Supplier</a> </li>
				<li> <a href="View_expire_product"><i class="bi bi-circle"></i>Expire Report</a> </li>
			</ul>
		</li>
		
		<li class="menu-label">Others</li>
		<li>
			<a class="has-arrow" href="javascript:;">
				<div class="parent-icon"><i class="bi bi-lock-fill"></i> </div>
				<div class="menu-title">Authentication</div>
			</a>
			<ul>
				<li> <a href="add_user.php" target="_blank"><i class="bi bi-circle"></i>Add User</a> </li>
				<li> <a href="change_password.php" target="_blank"><i class="bi bi-circle"></i>Change Password</a> </li>
			</ul>
		</li>
		<li>
			<a href="add_employee.php">
				<div class="parent-icon"><i class="bi bi-person-lines-fill"></i> </div>
				<div class="menu-title">Add Employe</div>
			</a>
		</li>
		<li>
			<a href="add_employee.php">
				<div class="parent-icon"><i class="bi bi-person-lines-fill"></i> </div>
				<div class="menu-title">Attendance</div>
			</a>
		</li>
		<li>
			<a href="#" target="_blank">
				<div class="parent-icon"><i class="bi bi-telephone-fill"></i> </div>
				<div class="menu-title">Support</div>
			</a>
		</li>
	</ul>
	<!--end navigation-->
</aside>