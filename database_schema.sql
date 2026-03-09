CREATE TABLE BookDescribed (
    ISBN VARCHAR(20) PRIMARY KEY,
    Title VARCHAR(100),
    Author VARCHAR(100),
    Published INT,
    Genre VARCHAR(50),
    Description VARCHAR(1000)
);

CREATE TABLE Account (
    UserID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Password VARCHAR(100),
    Email VARCHAR(100),
    Role VARCHAR(20)
);

CREATE TABLE Inventory (
    BookID INT PRIMARY KEY,
    ISBN VARCHAR(20),
    Status VARCHAR(50),
    FOREIGN KEY (ISBN) REFERENCES BookDescibed(ISBN)
);

CREATE TABLE Booking (
    BookingID INT PRIMARY KEY,
    UserID INT,
    BookID INT,
    TimeOut INT,
    TimeDueIn INT,
    Returned BOOLEAN,
    FOREIGN KEY (UserID) REFERENCES Account(UserID),
    FOREIGN KEY (BookID) REFERENCES Inventory(BookID)
);
