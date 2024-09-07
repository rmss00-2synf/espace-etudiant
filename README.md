# espace-etudiant
Welcome to Espace-etudiant! This project is designed to provide a comprehensive platform for student management, featuring a responsive dashboard, resume creation, and interactive chat functionalities. Below is a detailed description of the project's components and functionalities.

## Features

### Login and Signup

### Dashboard
- A responsive dashboard modeled after the GINF1 interface.
- Features sorting capabilities based on various parameters.

### Profile Section
- **Resume**: Provides a brief presentation of the student.
- **CV**: Displays the student's CV if already created, or prompts the user to create one. 
  - The CV creation and other application tabs use jQuery for dynamic functionality.
  - Users can add multiple fields for skills, education, etc., as needed during CV creation.

### Blog Section
- A chat application for student discussions.
- JavaScript ensures that the page always loads at the bottom, so the latest message is always visible.
- Plans to implement AJAX for real-time message updates without page refresh.
- Word suggestion during typing and @-mentions to tag friends are in development.
- Messages will be formatted when tagging friends if they exist in the database.

### Settings
- Allows users to change their password.

### Logout
- Includes a button to log out of the application.

## Feedback
We welcome any feedback or suggestions for improvement. Please feel free to contribute ideas or report issues.
