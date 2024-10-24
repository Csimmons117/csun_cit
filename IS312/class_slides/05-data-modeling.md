## Chapter 2: Data Modeling 

### Learning objectives
- After completing this chapter, we will be able to:
    - discuss data modeling.
    - describe data-modeling building blocks.
    - define what business rules are and how they influence database design.

### Data Modeling and Data Models: A Clinical Case
- Student Demo:
    - go to a clinic.
    - see a doctor 
    - for medical/health situations( allments or illness)
    - The medical process, facts, events, objects ,entities , relationship,etc.

    Aliment(https://www.merriam-webster.com/):
    1. A bodily disorder or chronic disease; e.g. a stomach ailment.
    1. unrest, uneasiness, e.g., an emotional ailment.
### Data Modeling and Data Models

1. **Modeling**: A model abstracts the real world, focusing on a set of objects, events, or entities that are related in some way. 

1. **Data modeling**: creating a data model for  determinded problem domain in database design and implemetation:

- **Data model** Simple representation of the complex real-world data structures. 
> useful for supporting a specific problem domain in database.

## Fix this later 

![importance of data modeling]() 

### Data modeling blocks
1. **Entity**: Person, place, thing, or event about which data will be collected and stored.
- Attribute: characteristics of an entity.
- relationship: association between entities.
    - One-to-many(1:M): e.g., Course and class
    - Many-to many(M:N): e.g., student and class; physician and patient.
    - One-to-one(1:1): chair and department.
- constraint: restrication placed on data , e.g., update,delete , edit , add, etc. to ensures data integrity
- sample college database demo.

### Business rules
1. Business understanding: Breif description of a policy , procedure, or principle of a business. 
> Create and enfore actions in an organizations's environment

>Establish entities, relationships, and constraints. 

> For Example: descriptions and business rules of a small medical clinic.

### Discovering business rules (1 of 2 )
- Sources of business rules:
    - Company managers.
    - Policy makers
    - business documents 
    - inteviews with database users 
    > For example: descriptions and business rules of a small medical clinic 

### Discovering business rules (2 of 2)
- Why business rules?
    - standardize company's view of data 
    - facilitate communications between users and designers.
    - assist designers:
        1. understand the nature , role , scope of data and business processes
        1. develop appropriate relationships rules and constraints 
        1. create an accurate data model

### Translating business rules into data model components 
- Business rules for identification of entities , attributes, relationships, and constraints 
    - Nouns translated into entities 
    - verbs translated into relationships between entities 
- Relationships are bidrectional 

### Naming conventions 
-  Entity name requirements :
    - be decriptive of entities in the business environment 
    - use terms that is familiar to user
- Attribute name:
    - Be descriptive of the data represented by the attribute 
- Sample college database demo

### Relational modeling 
- SQL (Structured Query Language)-based relational
database application: SQL is the programming language
for relational databases; will be fully covered in IS441 -
Database Management Systems.

- SQL Programming Examples: https://www.w3schools.com/sql/sql_examples.asp

- End-user interface: Allows end user to interact with data.
- Collection of tables stored in the database:
- Each table is independent from another.
- Rows in different tables are related based on common value in
common attribute(s).
- Sample College Database Demo

### Entity Relationship (ER) Model

- Graphical representation of entities and their relationships in a relational database:
    - Entity relationship diagram (ERD): Uses graphic representations to model relational database components.
    - Entity instance/occurrence: Rows in a relational table.
    - Attributes: Particular characteristics in a relational table.
    - Connectivity: Relationship types in a relational database.
    - Sample College Database Demo

## Summary
-  Discuss data modeling and data models.
- Describe data modeling building blocks.
- Define business rules and how they influence database design.
- Explain how data models are classified.