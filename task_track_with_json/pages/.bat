@echo off
setlocal enabledelayedexpansion

set files=tasks.php create-task.php list-tasks.php login.php logout.php 404.php

for %%f in (%files%) do (
  echo.>%%f
)
