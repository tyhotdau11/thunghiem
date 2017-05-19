<table class="table table-hover table-striped table-condensed table-bordered ordersTable">
    <thead>
        <tr>
            <th>Product</th>
            <th>Date</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
    	<?php
        	//$id=$_GET['id'];
			//$db=new PDO('mysql:host=localhost;dbname=Dbcustomer','root','');
			$sql1="select * from orders where id_customer='$id'";
			$result1=$db->query($sql1);
			$s=0;
			while($r=$result1->fetch(PDO::FETCH_ASSOC)){
				echo ' <tr>
            <td>'.$r['product'].'</td>
            <td>'.$r['orderdate'].'</td>
            <td>'.$r['quantity'].'</td>
            <td>'.$r['price'].'</td>
            <td>'.$r['price']*$r['quantity'].'</td>
			
        </tr>';
				$s+=$r['price']*$r['quantity'];
			}
		?>
        <tr>
            
        </tr>
        
        <tr class="info">
            <td colspan="4">&nbsp;
                
            </td>
            <td>
                <strong><?php echo $s;?></strong>
            </td>
        </tr>
    </tbody>
</table>