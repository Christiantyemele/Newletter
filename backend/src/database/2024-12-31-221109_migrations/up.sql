-- Your SQL goes here
CREATE TABLE IF NOT EXISTS subscribers (
    id SERIAL PRIMARY KEY,
    email VARCHAR NOT NULL UNIQUE 
    );