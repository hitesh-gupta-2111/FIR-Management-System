-- DROP TABLE Police_Records;
-- DROP DATABASE `temp`;
-- CREATE DATABASE temp;-- /*!40100 DEFAULT CHARACTER SET latin1 */;
CREATE TABLE fir_management.Police_Records (
    Police_Id     INT       PRIMARY KEY 
                                  NOT NULL,
    First_Name    VARCHAR (20)  NOT NULL,
    Last_Name     VARCHAR (20),
    Pos        VARCHAR(20)       NOT NULL,
    DOB             DATE,
    Address         VARCHAR (150) NOT NULL,
    Phone_Number  INTEGER       NOT NULL,
    Aadhar_Number BIGINT        UNIQUE
                                  NOT NULL
);

CREATE TABLE fir_management.Case_Incharge (
     Case_Id          INTEGER NOT NULL REFERENCES Registration (Case_Id) ON DELETE CASCADE
                                                                    ON UPDATE CASCADE,
     Case_Incharge_Id INTEGER NOT NULL REFERENCES Police_Records (Police_Id),
     PRIMARY KEY (
         Case_Id,
         Case_Incharge_Id
     )
 );
 
 
 -- Table: Crime
 CREATE TABLE fir_management.Crime (
     Crime_Type VARCHAR(20) NOT NULL,
     Case_Id    INTEGER NOT NULL PRIMARY KEY
                          REFERENCES Registration (Case_Id) ON DELETE CASCADE
                                                              ON UPDATE CASCADE
);
 
 
-- Table: Criminal
 CREATE TABLE fir_management.Criminal (
     Criminal_Id      INTEGER               NOT NULL,
     Case_Id          INTEGER NOT NULL, FOREIGN KEY (Case_Id) REFERENCES Registration (Case_Id),
     First_Name       VARCHAR (20)          NOT NULL,
     Last_Name        VARCHAR (20),
     Address            VARCHAR (150),
     Case_Incharge_Id INTEGER               NOT NULL
                                              REFERENCES Police_Records (Police_Id),
     PRIMARY KEY (
         Criminal_Id,
         Case_Id
     )
 );
-- 
-- 
-- -- Table: Evidence
 CREATE TABLE fir_management.Evidence (
     Case_Id         INTEGER      NOT NULL PRIMARY KEY REFERENCES Registration (Case_Id),
     Case_Box_Number INTEGER       NOT NULL
                                     UNIQUE,
     Evidence_Type   VARCHAR (100) 
 );


CREATE TABLE fir_management.Registration(
     Aadhar_Number  BIGINT    NOT NULL,
     Case_Id        INTEGER   PRIMARY KEY AUTO_INCREMENT
                                    NOT NULL,
     First_Name     VARCHAR (20)  NOT NULL,
     Last_Name      VARCHAR (20),
     Address        VARCHAR (150) NOT NULL,
     Phone_Number   INTEGER       NOT NULL,
     Crime_Type     VARCHAR (20)  NOT NULL,
     Description    VARCHAR (200),
     Date_Of_Crime  DATETIME,
     Place_Of_Crime VARCHAR(100)
);
 
 
-- -- Table: Status
 CREATE TABLE fir_management.Status (
     Case_Id                 INTEGER  NOT NULL    PRIMARY KEY
                                            REFERENCES Registration (Case_Id) ON DELETE CASCADE
                                                                                ON UPDATE CASCADE,
     Submitted               BOOLEAN      NOT NULL,
     Fields_Verified         BOOLEAN      NOT NULL,
     Case_Incharge_Appointed BOOLEAN      NOT NULL,
     Progress_Description    VARCHAR (50),
     Completed               BOOLEAN      NOT NULL
 );
 
 
 -- Table: Suspects
 CREATE TABLE fir_management.Suspects (
     Case_Id      INTEGER   NOT NULL REFERENCES Registration (Case_Id) ON DELETE CASCADE
                                                                      ON UPDATE CASCADE,
     First_Name   VARCHAR (20)  NOT NULL,
     Last_Name    VARCHAR (20),
     Address        VARCHAR (150),
     Phone_number INTEGER,
     PRIMARY KEY (
         Case_Id,
         First_Name,
         Last_Name
     )
 );
 
 
 -- Table: Victim
 CREATE TABLE fir_management.Victim (
     First_Name    VARCHAR (20)  NOT NULL,
     Last_Name     VARCHAR (20),
     Aadhar_Number BIGINT        PRIMARY KEY
                                   NOT NULL
                                   REFERENCES Registration (Aadhar_Number) ON DELETE CASCADE
                                                                             ON UPDATE CASCADE,
     Address       VARCHAR (150) NOT NULL,
     Phone_number  INTEGER       NOT NULL
 );
 
 
 -- Table: Witness
 CREATE TABLE fir_management.Witness (
     Case_Id      INTEGER       NOT NULL REFERENCES Registration (Case_Id) ON DELETE CASCADE
                                                                      ON UPDATE CASCADE,
     First_Name   VARCHAR (20)  NOT NULL,
     Last_Name    VARCHAR (20),
     Address      VARCHAR (150) NOT NULL,
     Phone_Number INTEGER       NOT NULL,
     PRIMARY KEY (
         Case_Id,
         First_Name,
         Last_Name
     )
 );