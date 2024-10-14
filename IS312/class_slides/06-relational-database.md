## Relation Database

### Leaning Objectives

1. Identify relational model’s building components and explain the structure, content, and characteristics of relational tables.
1. Explain the purposes and components of data dictionary and system catalog with relational databases.
1. Identify appropriate entities and relationships among entities in the relational database model.

# Relational table and characteristics: simple college database 
make a picture 

### Keys in Relational Tables

1. Keys consist of one or more attributes that determine other attributes.

- Ensure that each row in a table is uniquely identifiable.
- Establish relationships among tables and to ensure the integrity of the data.

1. Primary key: Attribute or combination of attributes that uniquely identifies a row.
1. Foreign key: An attribute or combination of attributes in one table whose values must match the primary key in another table in terms of data type and attribute name.

# Keys in Relational Tables: Sample college database

# Types of Keys in relational tables: Another example 


### Relationships in Relational Databases: Sample College Database

1. One-to-many (1:M): e.g., Course and Class.
1. One-to-one (1:1): e.g., Chair and Department
- One entity can be related to only one other entity and vice versa. 
1. Many-to-many (M:N): e.g., Student and Class; Physician and Patient.
- Implemented by creating a new entity in 1:M relationships with the original entities.
- Composite entity (i.e., bridge or associative entity): Helps avoid problems inherent to M:N relationships.
> Includes the primary keys of tables to be related. 

# slide 9 here 

### Relationship in relational databases
> changeing the M:N relationships to two 1:M relationships [FIGURE3.26]

> The exapanded ER model [FiGURE3.27]

### Data Dictionary and System Catalog
1. Data Dictionary:
- Description of all tables in the database created by the user and designer. 
1. System Catalog: 
- System data dictionary that describes all objects within the database.

### Data Dictionary and System Catalog: Sample College Database 

## Summary:
1. Identify the relational model’s building components and explain structure, contents, and characteristics of a relational table.
1. Explain purposes and components of the data dictionary and system catalog with a relational database.
1. Identify appropriate entities and relationships among entities in a relational database model.










