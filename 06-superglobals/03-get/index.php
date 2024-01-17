<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

// echo isset($_GET['name']) ? $_GET['name'] : '';

// method prevents XSS attacks
// echo htmlspecialchars($_GET['name']) ?? '';
