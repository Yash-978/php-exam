# php-exam
# RESTful API Project: CRUD Operations on Independent Tables

## Objective
This project demonstrates the implementation of RESTful APIs in PHP for performing CRUD operations on three independent database tables. The process is documented and presented in a video showcasing the implementation.

---

## Project Requirements

### 1. Database Schema
Design a database with the following tables:

- **Users**:
  - `id`: Integer (Primary Key)
  - `name`: String
  - `email`: String
  - `phone`: String

- **Products**:
  - `id`: Integer (Primary Key)
  - `product_name`: String
  - `price`: Decimal

- **Orders**:
  - `id`: Integer (Primary Key)
  - `order_date`: DateTime
  - `status`: String

### 2. API Requirements
Implement a total of 6 APIs (2 APIs per table):

#### Users Table
1. **Add a new user**:
   - Method: `POST`
   - Endpoint: `/api/users`
   - Description: Insert a new user into the `Users` table.

2. **Retrieve all users**:
   - Method: `GET`
   - Endpoint: `/api/users`
   - Description: Retrieve all user records from the `Users` table.

#### Products Table
3. **Add a new product**:
   - Method: `POST`
   - Endpoint: `/api/products`
   - Description: Insert a new product into the `Products` table.

4. **Update a product price**:
   - Method: `PUT`
   - Endpoint: `/api/products/{id}`
   - Description: Update the price of a product identified by its ID.

#### Orders Table
5. **Add a new order**:
   - Method: `POST`
   - Endpoint: `/api/orders`
   - Description: Insert a new order into the `Orders` table.

6. **Delete an order by ID**:
   - Method: `DELETE`
   - Endpoint: `/api/orders/{id}`
   - Description: Delete an order from the `Orders` table by its ID.

---

## Project Structure

The project is organized as follows:

```
project-directory/
|-- index.php
|-- routes/
|   |-- api.php
|-- controllers/
|   |-- UserController.php
|   |-- ProductController.php
|   |-- OrderController.php
|-- models/
|   |-- User.php
|   |-- Product.php
|   |-- Order.php
|-- config/
|   |-- database.php
|-- utils/
|   |-- ResponseHandler.php
```

### Folder Details
- **`index.php`**: The entry point of the project.
- **`routes/`**: Defines all API routes.
- **`controllers/`**: Contains logic for handling API requests.
- **`models/`**: Defines the database interaction for each table.
- **`config/`**: Contains database connection settings.
- **`utils/`**: Helper functions for common tasks like error handling and formatting responses.

---

## API Design Principles

1. **HTTP Methods**:
   - `POST` for Create operations.
   - `GET` for Read operations.
   - `PUT` for Update operations.
   - `DELETE` for Delete operations.

2. **Response Format**:
   - All responses are returned in JSON format.
   - Example:
     ```json
     {
       "status": "success",
       "data": {
         "id": 1,
         "name": "John Doe",
         "email": "john@example.com",
         "phone": "1234567890"
       }
     }
     ```

3. **Error Handling**:
   - Missing Parameters: Return a `400 Bad Request` response.
   - Server Errors: Return a `500 Internal Server Error` response.
   - Validation Errors: Return appropriate error messages with details.

---

## Setup and Execution

1. **Clone the Repository**:
   ```bash
   git clone <repository-url>
   cd project-directory
   ```

2. **Configure the Database**:
   - Update the `config/database.php` file with your database credentials.

3. **Run the Project**:
   - Use a local server like XAMPP or WAMP.
   - Place the project directory in the `htdocs` folder.
   - Start the server and access the project via `http://localhost/project-directory`.

4. **Test the APIs**:
   - Use tools like Postman or cURL to test the API endpoints.

---

## Video Submission

Prepare a video demonstrating:
1. Setting up the project.
2. Database design and API implementation.
3. Testing each API using Postman.
4. Error handling and response formats.

---

## Future Enhancements
- Add authentication using JWT.
- Implement relationships between tables (e.g., Orders linked to Users and Products).
- Add pagination for large datasets.

 
### Users Table
![Users Table ](https://github.com/user-attachments/assets/47e11f63-473a-4d2b-a7be-e882b330e461)


### Products Table

![Products Table Screenshot](https://github.com/user-attachments/assets/b574993d-75b3-4b83-904a-a3996aa961c2)

### Orders Table

![Order Screenshot](https://github.com/user-attachments/assets/29ecad8a-8885-4275-9104-a4c962d8c909)


<div align="center"> <a href="https://drive.google.com/drive/folders/1Uey58ID5WgHEZvQ2ol3TEzYzchftVSM5?usp=drive_link">👉👉See App Demo Video👈👈</a></div>



