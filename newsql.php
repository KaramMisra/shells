
<?php
// MySQL database connection settings
$servername = "localhost"; // Change this to your MySQL server name
$username = "jozgqipc_cheif"; // Change this to your MySQL username
$password = "cheif@123"; // Change this to your MySQL password
$dbname = "jozgqipc_cheif"; // Change this to your MySQL database name

// Path where you want to store the SQL dump file
$backupFile = '/path/to/backup.sql'; // Change this to the desired backup file path and name

// Command to create a database dump using mysqldump
$command = "mysqldump --user={$username} --password={$password} --host={$servername} {$dbname} > {$backupFile}";

// Execute the command to create the backup
exec($command, $output, $returnValue);

if ($returnValue === 0) {
    echo "Database backup successful. You can download it <a href='$backupFile'>here</a>.";
} else {
    echo "Error creating database backup.";
}
?>
