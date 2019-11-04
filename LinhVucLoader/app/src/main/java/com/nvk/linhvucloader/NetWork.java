package com.nvk.linhvucloader;

import android.net.Uri;
import android.util.Log;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;

public class NetWork {
    //OK quên bật XAMPP
    //Quên xin bật mạng


    //private static final String BASE = "http://localhost:8000/api/";
    private static final String BASE = "http://10.0.3.2:8000/api/";//genny
    //private static final String BASE = "http://10.0.2.2:8000/api/";//android

    public static String connect(String uri, String method){
        //nối chuỗi URI lại
        Uri.Builder builder = Uri.parse(BASE+uri).buildUpon();
        //Xây dựng nó
        Uri uriBuilt = builder.build();

        String json = null;
        HttpURLConnection connection=null;
        try {
            //đưa nó lên trên thanh url google
            URL url = new URL(uriBuilt.toString());
            //mở kết nối (ENTER)
            connection = (HttpURLConnection) url.openConnection();
            //phương thức truyền
            connection.setRequestMethod(method);
            //kết nối
            connection.connect();

            //OK qua được đây là kết nối thành công
            //từ trang đó lấy các đoạn text json
            InputStream inputStream = connection.getInputStream();
            //từ cái input đó chuyển sang dạng stream để đọc . giống live stream ý
            //đọc bằng đối tượng buffer để
            BufferedReader reader = new BufferedReader(new InputStreamReader(inputStream));
            //để đọc chuỗi động , nên phải thay đổi.
            //chuỗi tĩnh không thay đổi thì dùng string
            StringBuilder stringBuilder = new StringBuilder();
            String line =null;
            // vì độ rộng trang cũng có giới hạn nên nó sẽ xuống dòng nên phải đọc đến khi dòng cuối cùng không còn chũ nào
            while ((line = reader.readLine())!=null){
                //nối về phía sau chuỗi
                stringBuilder.append(line);
                stringBuilder.append("\n");
            }
            json = stringBuilder.toString();

            Log.d("AAAAAAA",json);

            //đóng để tràng bộ nhớ
            inputStream.close();
            reader.close();
        } catch (MalformedURLException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }finally {
            //nếu đang kết nối thì dis

            if (connection != null){
                connection.disconnect();
            }
        }
        return json;
    }

}

