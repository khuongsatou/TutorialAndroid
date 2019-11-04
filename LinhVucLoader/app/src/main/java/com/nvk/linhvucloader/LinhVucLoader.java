package com.nvk.linhvucloader;

import android.content.Context;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.loader.content.AsyncTaskLoader;
//kế thừa nó và kết quả trả về là string
public class LinhVucLoader extends AsyncTaskLoader<String> {

    public LinhVucLoader(@NonNull Context context) {
        super(context);
    }

    //thêm static để truy xuất ko cần khởi tạo
    @Nullable
    @Override
    public String loadInBackground() {
        return NetWork.connect("linh_vuc","GET");
    }

    @Override
    protected void onStartLoading() {
        super.onStartLoading();
        //không có là nó không chạy
        forceLoad();
    }
}
