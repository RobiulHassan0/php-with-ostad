SELECT u.id, u.name, t.title, t.status
FROM users u 
LEFT JOIN tasks t ON u.id = t.user_id