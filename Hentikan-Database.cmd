@echo off
if not exist "%~dp0..\.tools\postgresql\stop.ps1" (
  echo Database portable khusus komputer awal tidak ditemukan.
  exit /b 0
)
powershell.exe -NoProfile -ExecutionPolicy Bypass -File "%~dp0..\.tools\postgresql\stop.ps1"
if errorlevel 1 pause
