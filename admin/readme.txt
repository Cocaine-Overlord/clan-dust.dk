username = clandust_dk
pw = Euro2018

#Create an admin account mysql
INSERT INTO 'Users' (username, md5(password)) VALUES ('$username','$password');
