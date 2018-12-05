<?php
$Host = "localhost"; 
$UserName = "ShadowBikes";
$Password = "Shadow#Bikes.";
$DBName = "Shadow_Bikes";
$DBConnect = mysqli_connect ( "$Host", "$UserName", "$Password", "$DBName" ) or die ( '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Connection error: ' . $DBConnect -> connect_error . '.<br>Please try again.</h4></div></div></div>' );

if ( mysqli_connect_errno ())
{
    echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Connection error: ' . $DBConnect -> connect_error . '.<br>Please try again.</h4></div></div></div>';
}

$ItemId = $_POST [ 'ItemID' ];
$ItemQty = $_POST [ 'ItemQty' ];
$ItemId = stripslashes ( $ItemId );
$ItemQty = stripslashes ( $ItemQty );
$ItemId = mysqli_real_escape_string ( $DBConnect, $ItemId );
$ItemQty = mysqli_real_escape_string ( $DBConnect, $ItemQty );
$ItemId = ( int ) $ItemId;
$ItemQty = ( int ) $ItemQty;

$TableName = "Cannondale_Inventory";
$Column = "QTY_In_Stock";
$SQLString = "SELECT QTY FROM $TableName WHERE ID = $ItemId";
if ( $QueryResult = mysqli_query ( $DBConnect, $SQLString ));
{
    while ( $Row = mysqli_fetch_array ( $QueryResult ))
    {
        $Item = $Row [ $Column ];
        $NewQty = $Item - $ItemQty;
    }
    $SQLString = "UPDATE $TableName SET QTY_In_Stock = $NewQty WHERE ID = $ItemId";
    if ( mysqli_query ( $DBConnect, $SQLString )) 
    {
        echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Inventory Updated.</h4></div></div></div>';
                    header ( "location: CannondaleInventory.php" );
    } else {
        echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Error: ' . $SQLString . '<br>' . mysqli_error ( $DBConnect ) . '.</h4></div></div></div>';
    }
    $SQLString = "SELECT QTY_In_Stock FROM $TableName WHERE ID = $ItemId";
    if ( $QueryResult = mysqli_query ( $DBConnect, $SQLString ));
    {
        while ( $Row = mysqli_fetch_array ( $QueryResult ))
        {
            $Item = $Row [ $Column ];
            if ( $Item == 0 )
            {
                $SQLString = "DELETE FROM $TableName WHERE ID=$ItemId";
                if ( mysqli_query ( $DBConnect, $SQLString )) 
                {
                    echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Inventory Updated.</h4></div></div></div>';
                    header ( "location: CannondaleInventory.php" );
                } else {
                    echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Error: ' . $SQLString . '<br>' . mysqli_error ( $DBConnect ) . '.</h4></div></div></div>';
                }
            }
        }
    }
}
mysqli_close ( $DBConnect );
?>