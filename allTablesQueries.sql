-- table query for profiles (which is profile for candidate )

CREATE TABLE profiles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    location VARCHAR(100) NOT NULL,
    summary TEXT NOT NULL,
    job_title VARCHAR(100) NOT NULL,
    company VARCHAR(100) NOT NULL,
    experience VARCHAR(50) NOT NULL,
    employment_type VARCHAR(50) NOT NULL,
    notice_period VARCHAR(50) NOT NULL,
    skills TEXT NOT NULL,
    qualification VARCHAR(100) NOT NULL,
    institute VARCHAR(150) NOT NULL,
    preferred_role VARCHAR(100) NOT NULL,
    preferred_location VARCHAR(100) NOT NULL,
    salary VARCHAR(50) NOT NULL,
    linkedin VARCHAR(255),
    portfolio VARCHAR(255),
    resume VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- tables query for company_profiles

CREATE TABLE company_profiles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(150) NOT NULL,
    industry VARCHAR(100) NOT NULL,
    company_size VARCHAR(50) NOT NULL,
    founded_year INT NOT NULL,
    company_type VARCHAR(50) NOT NULL,
    about_company TEXT NOT NULL,
    headquarters VARCHAR(150) NOT NULL,
    office_type VARCHAR(50) NOT NULL,
    company_email VARCHAR(150) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    website VARCHAR(255),
    linkedin VARCHAR(255),
    portfolio VARCHAR(255),
    work_environment VARCHAR(100) NOT NULL,
    benefits TEXT NOT NULL,
    logo VARCHAR(255) NOT NULL,
    gst_number VARCHAR(100) NOT NULL,
    pan_number VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Candidates table
CREATE TABLE candidates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(15),
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Companies table
CREATE TABLE companies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(150) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(15),
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


