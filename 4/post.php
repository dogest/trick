<?php
    parse_str(file_get_contents('php://input'), $_DATA);
    print_r($_DATA);