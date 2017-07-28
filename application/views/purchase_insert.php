<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to CodeIgniter</title>

		<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
		</style>
	</head>



	<body>

	<div id="container">
		<h1>Welcome to PURCHASE!</h1>
		<form action="purchase_submit" method="POST">
			<table>
				<thead>
					<tr>
						<th><h1>進貨</h1></th>
					</tr>
					<tr>
						<td>購買商品名稱</td>
						<td><input type="text" name="PRODUCT_NAME" id="" placeholder=""/></td>
					</tr>
					<tr>
						<td>購買來源名稱</td>
						<td><input type="text" name="SOURCE_NAME" id="" placeholder=""/></td>
					</tr>
					</tr>
						<td>商品欲售價格</td>
						<td><input type="text" name="PURCHASE_PRICE" id="" placeholder=""/></td>
					</tr>
					</tr>
						<td>購買商品數量</td>
						<td><input type="text" name="PURCHASE_AMOUNT" id="" placeholder=""/></td>
					</tr>
					</tr>
						<td>購買商品單價</td>
						<td><input type="text" name="PURCHASE_COST" id="" placeholder=""/></td>
					</tr>
					</tr>
						<td>購買商品成本</td>
						<td><input type="text" name="PURCHASE_TOTAL" id="" placeholder=""/></td>
					</tr>
					</tr>
						<td>購買商品日期</td>
						<td><input type="text" name="PURCHASE_DATE" id="" placeholder=""/></td>
					</tr>
					</tr>
						<td>欲分配蝦皮數量</td>
						<td><input type="text" name="PURCHASE_S_AMOUNT" id="" placeholder=""/></td>
					</tr>
					</tr>
						<td>欲分配露天數量</td>
						<td><input type="text" name="PURCHASE_R_AMOUNT" id="" placeholder=""/></td>
					</tr>
					</tr>
						<td>欲分配Y拍數量</td>
						<td><input type="text" name="PURCHASE_Y_AMOUNT" id="" placeholder=""/></td>
					</tr>
					</tr>
						<td>欲分配官網數量</td>
						<td><input type="text" name="PURCHASE_A_AMOUNT" id="" placeholder=""/></td>
					</tr>
					<tr>
						<td><input type="submit" name="" value="確認"></td>
					</tr>
				</thead>
				
			</table>
		</form>
		
		<div>
			<form action="go_home" method="POST">
				<input type="submit" name="" value="回首頁">
			</form>
		</div>
		
	</div>

	</body>



</html>






















