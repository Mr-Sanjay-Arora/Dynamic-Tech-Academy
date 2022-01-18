<?php
require('../../vendor/autoload.php');
include("../../env/database.php");
include("../../env/functions.php");
include("../../env/constants.php");

session_start();

$order=get_safe_value($_GET['purchase']);

// function order($id){

// 	return $html;
// }


$order_query = mysqli_query($con, "select * from orders, students, course_master where orders.course_id = course_master.course_id and orders.student_id = '".$_SESSION["user_id"]."' and orders.order_number = '".$order."'");
$check=mysqli_num_rows($order_query);
if($check>0){	
    $row = mysqli_fetch_assoc($order_query);
        $inv_date=DateTime::createFromFormat('Y-m-d H:i:s', $row["date_created_on"]);
        $enroll_date=DateTime::createFromFormat('Y-m-d H:i:s', $row["date_of_purchase"]);
			$html = '<html>
            <head>
                <meta charset="utf-8">
                <title>Invoice '.$row["order_number"].'</title>
                <style>
                /* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

span[] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 90%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 "Poppins", sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }
address p{font-size:.85rem;margin-top:0}
address h4{margin-bottom:0}

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: left; }

table.inventory td:nth-child(1) { text-align:left;width: 60%; }
table.inventory td:nth-child(3) { text-align:center;width: 20%; }
table.inventory td:nth-child(2) { text-align: center; width: 10%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */
aside h1 { text-align:left;border: none; margin: 1rem 0 0 0; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
    .balance{float:right}
}

@page { margin: 40px; }
                </style>
            </head>
            <body>
                <header>
                    <h1>Invoice</h1>
                    <address style="float:left">
                        <h2>Dynamic Tech Academy</h2>
                    </address>
                    <h4>Invoice To</h4>
                    <address style="float:right">
                        <p>'.$row["first_name"]." ".$row["middle_name"]." ".$row["last_name"].'</p>
                        <p>'.$row["curent_address"].'</p>
                        <p>'.$row["contact"]." ".$row["additional_contact"].'</p>
                    </address>
                </header>
                <article>
                    <table class="meta">
                        <tr>
                            <th><span >Invoice #</span></th>
                            <td><span >'.$row["order_number"].'</span></td>
                        </tr>
                        <tr>
                            <th><span >Date</span></th>
                            <td><span >'.$inv_date->format('dS M Y').'</span></td>
                        </tr>
                        <tr>
                            <th><span >Amount Due</span></th>
                            <td><span id="prefix" >$</span><span>'.number_format($row["total_fees"]-$row["amount_paid"],2).'</span></td>
                        </tr>
                    </table>
                    <table class="inventory">
                        <thead>
                            <tr>
                                <th><span>Course Name</span></th>
                                <th style="text-align:center"><span>Date of Purchase</span></th>
                                <th style="text-align:center"><span>Amount</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span>'.$row["course_name"].'</span></td>
                                <td><span>'.$enroll_date->format('dS M Y').'</span></td>
                                <td><span data-prefix>$</span>'.number_format($row["total_fees"],2).'</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="balance">
                        <tr>
                            <th><span >Total</span></th>
                            <td><span data-prefix>$</span><span>'.number_format($row["total_fees"],2).'</span></td>
                        </tr>
                        <tr>
                            <th><span >Amount Paid</span></th>
                            <td><span data-prefix>$</span><span >'.number_format($row["amount_paid"],2).'</span></td>
                        </tr>
                        <tr>
                            <th><span >Balance Due</span></th>
                            <td><span data-prefix>$</span><span>'.number_format($row["total_fees"]-$row["amount_paid"],2).'</span></td>
                        </tr>
                    </table>
                </article>
                <aside>
                    <h1><span >Additional Notes</span></h1>
                    <div >
                        <p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
                    </div>
                </aside>
            </body>
        </html>';
    }
else{
	redirect("my-profile");
}


$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file="orders/$order.pdf";
$mpdf->output($file,'D');
//D
//I
//F
//S
?>