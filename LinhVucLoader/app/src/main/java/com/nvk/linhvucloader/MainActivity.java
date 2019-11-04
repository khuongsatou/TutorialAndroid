package com.nvk.linhvucloader;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.loader.app.LoaderManager;
import androidx.loader.content.Loader;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.util.Log;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity  implements LoaderManager.LoaderCallbacks<String> {
    private List<LinhVuc> linhVucs = new ArrayList<>();
    private RecyclerView rcvLinhVuc;
    private LinhVucAdapter adapter;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        //thực hiện thêm vào recyclerview
        radiation();
        createAdapter();
        startLoader();

    }

    private void createAdapter() {
        //khởi tạo adapter
        adapter = new LinhVucAdapter(this,linhVucs);
        //cấu hình recycler view
        //không có ko hiện
        rcvLinhVuc.setLayoutManager(new LinearLayoutManager(this));
        rcvLinhVuc.setAdapter(adapter);
        //xong
    }

    private void radiation() {
        rcvLinhVuc = findViewById(R.id.rcvLinhVuc);
    }

    //xong
    private void startLoader() {
        //nếu id thứ 0 được tạo rồi thì tạo lại
        if (getSupportLoaderManager().getLoader(0) != null){
            //tạo id , null(Truyền dữ liệu cái này dùng sau), gọi lại hàm main
            getSupportLoaderManager().initLoader(0,null,this);
        }
        // thay thế cho fetch , và nếu hàm MAIN bị hủy thì khi tạo lại thì sẽ restart lại
        getSupportLoaderManager().restartLoader(0,null,this);

    }

    @NonNull
    @Override
    public Loader<String> onCreateLoader(int id, @Nullable Bundle args) {
        //khởi tạo đầu tiên
        //truyền màng hình vào là context : MainActivity
        return new LinhVucLoader(this);
    }

    @Override
    public void onLoadFinished(@NonNull Loader<String> loader, String data) {
        //viết json đọc ở đây
        Log.d("AAAAAAA",data+"");

        JSONObject objData = null;
        try {
            objData = new JSONObject(data);
            JSONArray arrData = objData.getJSONArray("data");
            for (int i = 0; i < arrData.length(); i++) {
                JSONObject objItemData = arrData.getJSONObject(i);
                int id = objItemData.getInt("id");
                String tenLinhVuc = objItemData.getString("ten_linh_vuc");

                LinhVuc linhVuc = new LinhVuc(id,tenLinhVuc);
                //giờ thêm vào mãng lớn

                //xong
                //gán nó vào mảng vì mảng là tham chiếu nó sẽ tự truyền vào adapter khi cập nhật lại
                linhVucs.add(linhVuc);
            }
        } catch (JSONException e) {
            e.printStackTrace();
        }
        //cập nhật
        //xong đó nó đã lấy được API
        adapter.notifyDataSetChanged();


    }

    @Override
    public void onLoaderReset(@NonNull Loader<String> loader) {

    }
}
