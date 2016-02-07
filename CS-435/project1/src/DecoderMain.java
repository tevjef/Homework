import java.io.ByteArrayInputStream;
import java.nio.charset.StandardCharsets;

public class DecoderMain{
    public static void main(String[] args){
		Decoder decoder=new Decoder(new ByteArrayInputStream(args[0].getBytes(StandardCharsets.UTF_8)));
		decoder.setDebug(false);
		decoder.decode();
    }
}