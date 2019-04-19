# FIR-Management-System


	Group Member Names-
	Hitesh Gupta (160296)
	Ashish Gupta (160161)
	Sarthak Gupta (160626)
	Rohan Garg (160579)
	Kaveti Dinesh Kumar (160329)


Introduction :
In this project, we have tried to implement an FIR Management System. The front end has been implemented through HTML. The main page has been provided with three options- 
1) Option for a victim to file an FIR whose details get stored to the main database.
2) Option for a victim to check the status of his case, by using his case-id
3) A login section which provides the option for login with a username and password to the admin (a police official in this case). After successful login, the user gets redirected to a query page. The query page is form and button page in which we have provided some basic set of queries. The form handling has been done through PHP. We have only included some basic queries which can easily be increased and improved upon if needed. The database on which these queries are based has been made using mySQL. 

The structure of the database is as follows:

Entities:
	
	1. Registration (Avoid duplicate registrations)
	2. Victim
	3. Crime
	4. Status (Log)
	5. Case Incharge
	6. Police Officers
	7. Suspects
	8. Evidence
	9. Witness
	10. Criminal
	
Details:

	

	1.Victim :
	First Name
	Last Name
	Aadhar no.
	Address
	Phone number

      2.Registration:
	Aadhar no. (Victim)
	Case Id
	Crime type
	Description
	Date of crime
	Place of crime

      3. Criminal:
	Criminal Id
	Case Id *(registration)
	First Name
	Last Name
	Address
	Case incharge id*(Police Records)

      4. Crime:
	Crime type*(registration)
	Case Id*(registration)
	
     5.  Status
	Case Id*(registration)
	Submitted
	Fields verified
	Case Incharge appointed
	Progress Description

     6.  Case Incharge:
	Case Id*(registration)
	Case Incharge Id*(Police Records)
	

     7.  Police Records:
	Police ID
	First Name
	Last Name
	Position
	DOB
	Address
	Phone number
	Aadhar number

    8.  Suspects:	
	Case Id*(registration)
	First Name
	Last Name
	Address
	Phone number
	
    9.  Witness:
	Case Id*(registration)
	First Name
	Last Name
	Address
	Phone number

    10.  Evidence:	
	Case Id*(registration)
	Case box number
	Evidence type
	

	Triggers:
	1 .  Insert into “victim” after insert into “registration” (Aadhar number in registration is updated using cascade)
	2 .  Insert into “Case Incharge” first after addtion of a row into registraiton and then after case incharge appointed of a case 	      id in “status” changes to yes
	3 .  insert row into “crime” after insert into “registration”
	4 .  insert into “criminal” after completed in “status” changes to yes
	5 .  insert into “status” only case id after insert into registration and by default all attributes are set to “NO” initially

