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
    FOREIGN KEY (ISBN) REFERENCES BookDescribed(ISBN)
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





-- ACCOUNT DATA
INSERT INTO Account (UserID, FirstName, LastName, Password, Email, Role) VALUES
(1, 'John', 'Smith', 'pass1', 'JohnSmith@gmail.com', 'Student'),
(2, 'Jane', 'Smith', 'pass2', 'JaneSmith@gmail.com', 'Staff'),
(3, 'Alex', 'Jones', 'pass3', 'AlexJones@gmail.com', 'Student');

-- BOOK DESCRIPTIONS
INSERT INTO BookDescribed (ISBN, Title, Author, Published, Genre, Description) VALUES
('ISBN-001', 'The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Classic', 'A story of the Jazz Age.'),
('ISBN-002', '1984', 'George Orwell', 1949, 'Dystopian', 'Big Brother is watching.'),
('ISBN-003', 'The Hobbit', 'J.R.R. Tolkien', 1937, 'Fantasy', 'A hobbits journey.'),
('ISBN-004', 'Brave New World', 'Aldous Huxley', 1932, 'Dystopian', 'A programmed society.'),
('ISBN-005', 'Hamlet', 'William Shakespeare', 1603, 'Tragedy', 'The Prince of Denmark.'),
('ISBN-006', 'Moby Dick', 'Herman Melville', 1851, 'Adventure', 'The hunt for the white whale.');

-- INVENTORY
INSERT INTO Inventory (BookID, ISBN, Status) VALUES
(101, 'ISBN-001', 'Checked Out'),
(102, 'ISBN-002', 'Checked In'),
(103, 'ISBN-003', 'Checked Out'),
(104, 'ISBN-004', 'Checked Out'),
(105, 'ISBN-005', 'Checked Out'),
(106, 'ISBN-006', 'Checked In');

-- BOOKINGS
INSERT INTO Booking (BookingID, UserID, BookID, TimeOut, TimeDueIn, Returned) VALUES
(1, 1, 101, '2026-04-01', '2026-04-15', 0),
(2, 3, 103, '2026-04-05', '2026-04-19', 0),
(3, 1, 104, '2026-04-10', '2026-04-24', 1);