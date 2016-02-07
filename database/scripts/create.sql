# Make the database if it is not there.
DROP DATABASE IF EXISTS apw;
CREATE DATABASE apw COLLATE utf8_general_ci;

# Make sure we refer to our new database.
USE apw;

# Set up a default user with a generated password.
GRANT SELECT ON `apw`.* to 'apw_user'@'localhost' IDENTIFIED BY 'password';

# Create the main book table.
# Right now, I am not too worried about titles etc. but they will come.
CREATE TABLE item (
  id            INT                     AUTO_INCREMENT PRIMARY KEY,
  asin          VARCHAR(10) NOT NULL,
  price         NUMERIC(15,2) NOT NULL,
  last_checked  TIMESTAMP DEFAULT NOW() NOT NULL
);
