# Use the official Node.js image as the base image
FROM node:latest
# Set the working directory
WORKDIR /frontend
# Copy the package.json and package-lock.json files
COPY package*.json ./
# Install dependencies
RUN npm install
# Copy the rest of the application code
COPY . .
# Expose the application's port
EXPOSE 5173
# Start the application
CMD ["npm", "run", "dev"]