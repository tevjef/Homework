public class rational {
	
	int numerator;
	int denominator;

	public rational (int numer, int denom) {
		numerator = numer;
		denominator = denom;

		reduce();

	}

	public void getRational() {

		System.out.println(this.getNumer() + " / " + this.getDenom());
	}

	public int getNumer() {

		return numerator;
	}

	public int getDenom() {

		return denominator;
	}

	public rational reciprocal() {

		return new rational(denominator, numerator);
	}


	public rational add(rational frac) {

		int commond = denominator * frac.getDenom();
		int numer1 = frac.getDenom() * numerator;
		int numer2 = frac.getNumer() * denominator;
		int newNumer = numer1 + numer2;

		return new rational(newNumer, commond);
	}

		
	public rational subtract(rational frac) {

		int commond = denominator * frac.getDenom();
		int numer1 = frac.getDenom() * numerator;
		int numer2 = frac.getNumer() * denominator;
		int newNumer = numer1 - numer2;

		return new rational(newNumer, commond);
	}

	public rational multiply(rational frac) { 

		int numer = numerator * frac.getNumer();
		int denom = denominator * frac.getDenom();

		return new rational(numer, denom);

	}

	public rational divide(rational frac) {

		rational recipFrac = frac.reciprocal();

		int numer = numerator * recipFrac.getNumer();
		int denom = denominator * recipFrac.getDenom();

		return new rational(numer, denom);
	}

	public void reduce() {

		int gcm = gcm(numerator, denominator);

		numerator /=  gcm;
		denominator /= gcm;
	}

	public int gcm(int numer, int denom) {

		int num = Math.max(numer, denom);
		int den = Math.min(numer, denom);

		while (den != 0) {
			int r = num % den;
			num = den;
			den = r;
		}

		return num;
	}
}
