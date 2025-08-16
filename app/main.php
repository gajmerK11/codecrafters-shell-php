<?php

error_reporting(E_ALL);

// Prints $ in the terminal
fwrite(STDOUT, "$");

// Wait for user input
$user_input = trim(fgets(STDIN));
fwrite(STDOUT, "$user_input: command not found");
