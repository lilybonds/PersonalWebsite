<?php
include 'top.php';
?>
<main>
    <h2>Create Table SQL</h2>
    
    <pre>
    CREATE TABLE tblContactInfo(
    pmkContactID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fldFirstName varchar(50) DEFAULT NULL,
    fldLastName varchar(50) DEFAULT NULL,
    fldEmail varchar(50) DEFAULT NULL,
    fldReason varchar(20) DEFAULT NULL,
    fldDescription varchar(400) DEFAULT NULL
    )
    </pre>

    <h2>Insert records into the table</h2>
    <pre>
    INSERT INTO tblContactInfo
    (pmkContactID, fldFirstName, fldLastName, fldEmail, fldReason, fldDescription)
    VALUES
    (1, 'Aaron', 'Perkel', 'aperkel@uvm.edu', 'Other', 'Test');
    </pre>

    <h2>Select all from table</h2>
    <pre>
    SELECT * FROM `tblContactInfo`
    </pre>
</main>
<?php include 'footer.php'?>