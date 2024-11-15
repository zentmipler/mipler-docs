#!/bin/bash

# Pull the latest changes from the git repository
echo "Pulling latest changes from git..."
git pull

# Check if there are any changes in the repository
if git diff-index --quiet HEAD --; then
    echo "No changes detected. Build not required."
else
    echo "Changes detected. Running Docusaurus build..."
    # Run the Docusaurus build command
    yarn build
    echo "Build completed successfully."
fi