
# SQL CODE TO CREATE THE INITIAL MOVIE TABLE. 
CREATE TABLE MovieTB (MovieID int NOT NULL AUTO_INCREMENT, 
                      Movie_Name varchar(255) NOT NULL, 
                      Director varchar(255) NOT NULL, 
                      Movie_Genre varchar(255) NOT NULL,
                      Release_Date varchar(255) NOT NULL,
                      PRIMARY KEY (MovieID)
                    );