1. Physicians
   -> PhysicianID (Primary Key)
   -> FirstName
   -> LastName
   -> PrimaryLocationID (Foreign Key referencing Locations table)

2. Patients
   -> PatientID (Primary Key)
   -> FirstName
   -> LastName

3. Appointments
   -> AppointmentID (Primary Key)
   -> PhysicianID (Foreign Key referencing Physicians table)
   -> PatientID (Foreign Key referencing Patients table)
   -> AppointmentDateTime
   -> LocationID (Foreign Key referencing Locations table)

4. Locations
   -> LocationID (Primary Key)
   -> LocationName

5. Ailments
   -> AilmentID (Primary Key)
   -> AilmentName
   -> Description
   -> RecommendedTreatment
   -> Charge

6. AppointmentAilments
   -> AppointmentAilmentID (Primary Key)
   -> AppointmentID (Foreign Key referencing Appointments table)
   -> AilmentID (Foreign Key referencing Ailments table)

