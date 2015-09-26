import java.text.NumberFormat;

public class Payroll {
    
    private String name;
    private int Id;
    private int hours;
    private double rate;
    
    public String getName() {
        return name;
    }
    public void setName(String name) throws InvalidNameException {
        if(name.equals("") || name == null) {
            throw new InvalidNameException(name);
        }
        else {
            this.name = name;
        }
        
    }
    public int getId() {
        return Id;
    }
    public void setId(int id) throws InvalidIdException {
        if(id < 0) {
            throw new InvalidIdException(id);
        }
        else {
            Id = id;
        }
    }
    public int getHours() {
        return hours;
    }
    public void setHours(int hours) throws InvalidHoursException {
        if(hours < 0 || hours > 84) {
            throw new InvalidHoursException(hours);
        } else {
            this.hours = hours;
        }
    }
    public double getRate() {
        return rate;
    }
    public void setRate(double rate) throws InvalidRateException {
        if (rate < 0 || rate > 25) {
            throw new InvalidRateException(rate);
        } else {
            this.rate = rate;
        }
    }
    
    public String getGrossPay() {
        NumberFormat formatter = NumberFormat.getCurrencyInstance();
        
        return formatter.format(getHours() * getRate());
    }
    
    public Payroll(String name, int id) throws InvalidNameException, InvalidIdException {
            this.setName(name);
            this.setId(id);    
    }
    
    public Payroll() {
    }
    public String toString() {
        return "Gross Pay: " + getGrossPay();
    }
}
