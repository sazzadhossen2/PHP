<?php

session_start();
//shob gula data delet kore dey session_destroy();--------------------------
// session_destroy();
//spacific data delet kore----------------
unset($_SESSION["userEmail"]);
