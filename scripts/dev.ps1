Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'
$projectRoot = Split-Path $PSScriptRoot -Parent
$runtimeRoot = Join-Path (Split-Path $projectRoot -Parent) '.tools'
if (Test-Path -LiteralPath (Join-Path $runtimeRoot 'php/php.exe')) {
    $env:PATH = (Join-Path $runtimeRoot 'php') + ';' + $env:PATH
}
$nodeRoot = Join-Path $runtimeRoot 'node'
if (Test-Path -LiteralPath $nodeRoot) {
    $nodeDir = Get-ChildItem -LiteralPath $nodeRoot -Directory | Where-Object { Test-Path -LiteralPath (Join-Path $_.FullName 'node.exe') } | Select-Object -First 1
    if ($null -ne $nodeDir) { $env:PATH = $nodeDir.FullName + ';' + $env:PATH }
}
$pgStart = Join-Path $runtimeRoot 'postgresql/start.ps1'
if (Test-Path -LiteralPath $pgStart) { & $pgStart }
Set-Location -LiteralPath $projectRoot
$composerPhar = Join-Path $runtimeRoot 'composer.phar'
if (Test-Path -LiteralPath $composerPhar) {
    & php $composerPhar run dev
} else {
    & composer run dev
}
exit $LASTEXITCODE
