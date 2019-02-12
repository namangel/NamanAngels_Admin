<html>
    <head>
        <title>Transaction</title>
        <link rel="stylesheet" href="css/transaction.css">
        <style>
            .cont{
                margin-left: 290px;
            }
            .tab{
                margin:40px;
            }
            .tab table,form{
                width:100%;
            }
            .tab td{
                padding:15px 0px;
                text-align:center;
            }
            .tab th {
                background-color: #ff8533;
                color: white;
                padding:15px 0px;
                text-align:center;
            }
            .tab tr{
                background-color: white;
            }
            tr:nth-child(odd){background-color: #f2f2f2;}
            .tab form{
                margin:20px 0px;
                background-color:white;
                padding:20px;
            }
            .tab input,select{
                margin:0px 20px;
            }
            .butn{
                background-color: #ff8533;
                border: none;
                color: white;
                cursor: pointer;
                padding:5px 20px;
            }
        </style>
    </head>
    <body>
        <?php require "sidebar.php" ?>
        <div class="cont">
            <div class="tab">    
                <center>
                <form>
                    <label>Startup Name: </label><input type="text">
                    <label>Investor Name: </label><input type="text">
                    <select>
                        <option>Investor Interested</option>
                        <option>Deal Complete</option>
                    </select>
                    <input type="submit" value="Update" class="butn">
                </form>
                <table>
                    <tr>
                        <th>Investor</th>
                        <th>Startup</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                    <td>ABC</td>
                    <td>PQR</td>
                    <td>Investor Interested</td>
                    </tr>
                    <tr>
                    <td>XYZ</td>
                    <td>LMN</td>
                    <td>Deal Complete</td>
                    </tr>
                </table>
                </center>
            </div>
        </div>
    </body>
</html>