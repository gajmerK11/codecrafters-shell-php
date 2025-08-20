<?php

// Enable all error reporting for development and debugging
error_reporting(E_ALL);

/**
 * Main REPL (Read-Eval-Print Loop) - The core of our shell
 * This infinite loop continuously:
 * 1. Shows a prompt
 * 2. Waits for user input
 * 3. Processes the command
 * 4. Displays the result
 * 5. Loops back to step 1
 */
while (true) {
    
    // Display the shell prompt ($) to indicate the shell is ready for input
    // STDOUT ensures output goes to the terminal/console
    fwrite(STDOUT, "$ ");
    
    // Read user input from STDIN (standard input - keyboard)
    // trim() removes whitespace and newline characters from the input
    // This prevents formatting issues in our output
    $user_input = trim(fgets(STDIN));
    
    // Process the command and display the result
    // For this stage, all commands are treated as invalid
    // \n adds a newline so the next prompt appears on a clean line
    fwrite(STDOUT, "$user_input: command not found\n");
    
    // Loop continues automatically - no need for explicit loop control
    // The while(true) ensures the shell keeps running until manually stopped
}
