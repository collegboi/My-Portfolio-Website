create table Project (
	
	projectID INT UNSIGNED AUTO_INCREMENT,
	projectName VARCHAR(30) NOT NULL,
	projectDesc TEXT,
	projectDate TIMESTAMP,
	projectLocation VARCHAR(200),
	PRIMARY KEY(projectID)
	
);

create table Blog (
	
	blogID INT UNSIGNED AUTO_INCREMENT,
	blogName VARCHAR(30) NOT NULL,
	blogImageLocation  VARCHAR(80),
	blogDesc MEDIUMTEXT,
	blogDate TIMESTAMP,
	PRIMARY KEY(blogID),
	projectName VARCHAR(30) NOT NULL
);
	

ALTER TABLE Blog ADD CONSTRAINT projectID_fk FOREIGN KEY(projectName) REFERENCES Project(projectName) ON UPDATE CASCADE ON DELETE CASCADE;

/*
foreign key (projectID) references Project(id)

ALTER TABLE Blog ADD CONSTRAINT projectID_fk FOREIGN KEY(projectID) REFERENCES Project(id) ON UPDATE CASCADE ON DELETE CASCADE;
*/

