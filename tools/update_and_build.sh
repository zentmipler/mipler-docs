#!/bin/bash

# Fetch latest updates
git fetch origin

# Check if there are updates
UPDATES=$(git log HEAD..origin/main --oneline)

if [ -n "$UPDATES" ]; then
    echo "Updates found. Pulling changes..."

    # Pull updates
    git pull origin main

    # Run Docusaurus build
    echo "Building Docusaurus site..."
    yarn build

    echo "Build completed successfully!"
else
    echo "No updates found. Repository is up to date."
fi