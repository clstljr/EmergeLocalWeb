# EmergeLocal Student Information Form

This project is a simple PHP student information form created for the EmergeLocal assessment.

## Features

- Collects first name and last name
- Uses a calendar date picker for date of birth
- Does not allow a future date of birth
- Includes a gender dropdown
- Sends the form information using `POST`
- Displays submitted information on a success page
- Protects displayed values using `htmlspecialchars()`
- Uses the same Christmas background and design on both pages
- Includes a back-to-form button on the success page
- Does not use a database

## Folder structure

```text
Sabulao Jr, Julius Jojo_EmergeLocalWeb/
├── index.php
├── success.php
├── css/
│   └── styles.css
└── image/
    └── xmas-background.png
```

## Requirements

- XAMPP
- Apache
- A web browser

No database or MySQL setup is required.

## How to run the project

1. Copy the project folder into:

   ```text
   C:\xampp\htdocs\
   ```

2. Start **Apache** in the XAMPP Control Panel.
3. Open the project in a browser. Because the folder name contains spaces and punctuation, use the URL-encoded version:

   ```text
   http://localhost/Sabulao%20Jr,%20Julius%20Jojo_EmergeLocalWeb/index.php
   ```

4. Complete the form and select **Submit Information**.

## Testing checklist

- Submit the form with all fields completed.
- Confirm the success page displays the submitted values.
- Confirm the back button returns to the form.
- Try selecting a future date and confirm it is rejected.
- Try submitting without completing required fields.
- Confirm the Christmas background appears on both pages.

## Notes

Keep `xmas-background.png` inside the `image` folder. The stylesheet loads it using this relative path:

```css
url("../image/xmas-background.png");
```
