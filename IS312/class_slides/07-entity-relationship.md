## The Entity Relationship Modeling 

### Learning Objectives:

1. Identify main characteristics of the entity relationship components of a relational database.
1. Describe how relations and relationships are defined, refined, and incorporated into database design process.
1. Understand how the entity-relationship diagram (ERD) components affect database design and implementation.
1. Understand that the real-world database design often requires reconciliations of conflicting goals.

### Entity Relationship Model (ERM)
1. The basis of an entity relationship diagram (ERD): 

- Conceptual database as viewed by user and designer: The blue print of a relational database.

1. Include the database’s main components:
- Entities
- Attributes
- Relationships

### Entities 
1. Objects of interest to the database user.
1. In an E-R Model, an entity corresponds to a table (or a relation) in the relational database.
- A table row as an entity record, instance, or occurrence.
1. An entity is represented by a rectangle that contains the entity’s name
- The entity name, a noun, is usually written in all capital letters.

### Entities: Sample College Database
[figure]

### Attributes
1. Characteristics of entities:
- Domain: A set of possible values for a given attribute.
- Identifier: One or more attributes that uniquely identify each entity instance.
- Composite primary key: Primary key composed of more than one attribute.

### Relationships, Connectivity, and Cardinality 
1. Relationships between entities operate in both directions.
- Participants: Entities that participate in a relationship.
1. Connectivity: Relationship classification or type.
- Include 1:1, 1:M, and M:N.
1. Cardinality: Minimum and maximum number of entity occurrences associated with one occurrence of a related entity; Based on business rules. 
1. Database Demo: Sample College Database.

### Relationship Participation Based on Business Rules
1. Optional participation:
- One entity occurrence does not require a corresponding entity occurrence in a particular relationship.
1. Mandatory participation:
- One entity occurrence requires a corresponding entity occurrence in a particular relationship.

### Relationship Participation Based on Business Rules
> figure 4.13 class is optional to course 

- Crow's foot diagram notation: It represents entities as boxes, and relationships as lines between the boxes. Different shapes at the ends of these lines represent the relative cardinality of the relationship. These symbols are used in pairs to represent the four types of cardinality that an entity may have in a relationship. 

> figure 4.14 Course and class in a mandatory relationship

### Relationship Degree

1. Indicates the number of entities that are associated with a relationship

- Unary relationship: Association maintained within 1 single entity. 
- Binary relationship: 2 entities are associated.
- Ternary relationship: 3 entities are associated.


### Relationship Degree
> figure 4.15 Three type of relationship degree


### Associative (Composite or Bridge) Entities
1. Used to represent an M:N relationship between two entities.
1. Has a 1:M relationship with the 2 involved entities.
- Composed of the primary key of each involved entity.
1. May also contain additional necessary attributes.

> figure 4.25 A Composite entity in an ERD

### Developing a E-R Diagram (ERD)
1. Creation Activities of a Entity-Relationship Diagram (ERD):
- Create a detailed narrative of the organizational description of business operations and processes.
- Identify business rules based on the descriptions.
- Identify main entities, attributes, and relationships from business rules.
- Develop initial ERD.
- Identify more and relevant attributes and primary keys that adequately describe entities.
- Revise and review ERD.

### Developing a E-R diagram 
> figure 4.27 The second tiny college ERD segment 
> figure 4.28 The third tiny college ERD segment 
> figure 4.29 The fourth tiny college ERD segment 
> figure 4.30 The fifth tiny college ERD segment 
> figure 4.32 The sixth tiny college ERD segment 

### Developing E-R Diagrams: Sample College Database
> figure on slide 21 & 22

### Database Design Challenges: Conflicting Goals
1. Database designers must make design compromises that are triggered by conflicting goals.
- Database designers must conform to design standards and procedures. 
- High processing may limit the number and complexity of logically desirable relationships.
- Maximum information generation may lead to loss of clean design structures and high transaction speed.

## Summary;

1. Identify main characteristics of the entity relationship components of a relational database.
1. Describe how relationships are defined, refined, and incorporated into the relational database design process.
1. Understand how the E-R Diagram components affect database design and implementation.
1. Understand that the real-world database design often requires reconciliations of conflicting goals.

































