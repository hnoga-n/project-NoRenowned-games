<?php
    include './connect.php';
    if(isset($_GET['search'])  && isset($_GET['pagenum'])) {
        $html="";
        $sql="";
        $sql1="";
        $count = 0;
        $pagenum = intval($_GET['pagenum']);
        $pos = intval(($pagenum - 1) * 10);
        $search = $_GET['search'];
           
        
            $sql = "SELECT orderID,accID,total_price,date_create,consignee_name,address,phone_number,order_status
                    FROM invoice
                    WHERE consignee_name REGEXP '$search' or date_create REGEXP '$search' or phone_number REGEXP '$search'
                    ORDER BY orderID ASC
                    LIMIT $pos,10";
            $sql1 = "SELECT orderID,accID,total_price,date_create,consignee_name,address,phone_number,order_status
                    FROM invoice
                    WHERE consignee_name REGEXP '$search' or date_create REGEXP '$search' or phone_number REGEXP '$search'
                    ORDER BY orderID ASC";
        
        
        $result = $conn->query($sql);
        $result1 = $conn->query($sql1);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if($row['order_status'] == 1)
                    $status ="<td style='color:#41fd70'>Processed</td>";
                else if ($row['order_status'] == 0)
                    $status ="<td style='color:gray'>Waiting</td>";
                else 
                    $status = "<td style='color:red'>Cancelled</td>";
               $html.=
                    "<tr>
                        <td>".$row['orderID']."</td>
                        <td>".$row['accID']."</td>
                        <td>".$row['total_price']."</td>
                        <td>".$row['date_create']."</td>
                        <td>".$row['consignee_name']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['phone_number']."</td>
                        $status
                        <td style='
                        display: flex;
                        flex-direction: row;'>
                            <a href='./orderdetail.php?page=listbills&orderID=".$row['orderID']."'><button>Detail</button></a>
                            <a href=''><button onclick='changestatus(".$row['orderID'].",1)'>Accept</button></a>            
                            <a href=''><button onclick='changestatus(".$row['orderID'].",2)'>Decline</button></a>
                        </td>
                    </tr>"
                ;
            }
        }
    
        if ($result1->num_rows > 0) {
            while ($row = $result1->fetch_assoc()) {
                $count++;
            }
        }
        $count /= 10;
        $myobj = new stdClass();
        $myobj->pagenum = ceil($count);
        $myobj->html = $html;
        $myJSON = json_encode($myobj);
        echo $myJSON;
    }
    $conn->close();
?>