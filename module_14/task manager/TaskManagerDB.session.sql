INSERT INTO users (name, email) VALUES
('Asadul Islam', 'asad@mail.com'),
('Fatema Noor', 'fatema@mail.com'),
('Kamal Hossain', 'kamal@mail.com');

INSERT INTO tasks (user_id, title, description, status) VALUES
(1, 'Database Bakcup', 'taking backup fo servers', 0),
(1, 'Create Presentation', 'making slides', 1),
(1, 'Project Research', 'Resouces Collection', 0),

(2, 'Web Design', 'Checking Hompage', 0),
(2, 'Code Review', 'Projcet Code Review', 1), 

(3, 'Users Feedbacks', 'sending form link', 1),
(3, 'Bug Fixing', 'maintaining Login bugs', 0),
(3, 'Doqumantion', 'designing README File', 0);
