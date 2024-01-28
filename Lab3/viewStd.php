<?php
require 'students.php';


?>
<html>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        .std {
            color: red; 
        }
    </style>
    </style>
    <body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($students as $studentData) {
                echo "<tr" . ($studentData['status'] == 'PHP' ? ' class="std"' : '') . ">";
                echo "<td>" . $studentData['name'] . "</td>";
                echo "<td>" . $studentData['email'] . "</td>";
                echo "<td>" . $studentData['status'] . "</td>";
                echo "</tr>";
            }
            
            ?>
        </tbody>
    </table>
    </body>
</html>