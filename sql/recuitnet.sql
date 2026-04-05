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

--contact_messages
CREATE TABLE `recruitnet`.`contact_messages` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `full_name` VARCHAR(100) NOT NULL ,
    `email` VARCHAR(100) NOT NULL ,
    `subject` VARCHAR(100) NOT NULL ,
    `message` VARCHAR(255) NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

--Adding foreign key to profiles table to link it with candidates table
ALTER TABLE profiles
ADD COLUMN candidate_id INT NOT NULL UNIQUE AFTER id,
ADD CONSTRAINT fk_profiles_candidate
FOREIGN KEY (candidate_id) REFERENCES candidates(id)
ON DELETE CASCADE;

--Adding foreign key to company_profiles table to link it with companies table
ALTER TABLE company_profiles
ADD COLUMN company_id INT NOT NULL UNIQUE AFTER id,
ADD CONSTRAINT fk_profiles_company
FOREIGN KEY (company_id) REFERENCES companies(id)
ON DELETE CASCADE;

--Adding profile_pic column to profiles table
ALTER TABLE profiles
ADD profile_pic VARCHAR(255) AFTER portfolio;

--Addiing experience dates and description to profiles table
ALTER TABLE profiles
ADD COLUMN exp_from VARCHAR(20) NOT NULL AFTER company;

ALTER TABLE profiles
ADD COLUMN exp_to VARCHAR(20) NOT NULL AFTER exp_from;

ALTER TABLE profiles
ADD COLUMN experience_desc TEXT NOT NULL AFTER exp_to;

--adding education detes to profiles table
ALTER TABLE profiles
ADD COLUMN edu_from VARCHAR(20) NOT NULL AFTER institute;

ALTER TABLE profiles
ADD COLUMN edu_to VARCHAR(20) NOT NULL AFTER edu_from;

-- post a job table
CREATE TABLE jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    company VARCHAR(255),
    location VARCHAR(255),
    job_type VARCHAR(100),
    salary VARCHAR(100),
    experience VARCHAR(100),
    skills TEXT,
    description TEXT,
    apply_link VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--adding foreign key to jobs table to link it with companies table
ALTER TABLE jobs
ADD COLUMN company_id INT NOT NULL UNIQUE AFTER id,
ADD CONSTRAINT fk_jobs_company
FOREIGN KEY (company_id) REFERENCES companies(id)
ON DELETE CASCADE;