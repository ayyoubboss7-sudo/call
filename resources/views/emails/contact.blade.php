<!DOCTYPE html>
<html lang="fr">
<body style="margin:0;padding:24px;background:#f1f5f9;font-family:Arial,Helvetica,sans-serif;color:#0f172a;">
    <div style="max-width:600px;margin:0 auto;background:#ffffff;border-radius:12px;overflow:hidden;">

        <div style="background:#dc2626;padding:20px 28px;">
            <h1 style="margin:0;font-size:20px;color:#ffffff;">Nouveau message de contact</h1>
            <p style="margin:6px 0 0;font-size:13px;color:#fecaca;">Reçu depuis le site ARTI CALL</p>
        </div>

        <div style="padding:28px;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
                <tr>
                    <td style="padding:10px 0;color:#64748b;width:130px;">Nom</td>
                    <td style="padding:10px 0;font-weight:bold;">{{ $contact->nom }}</td>
                </tr>
                <tr>
                    <td style="padding:10px 0;color:#64748b;">Email</td>
                    <td style="padding:10px 0;"><a href="mailto:{{ $contact->email }}" style="color:#dc2626;">{{ $contact->email }}</a></td>
                </tr>
                <tr>
                    <td style="padding:10px 0;color:#64748b;">Téléphone</td>
                    <td style="padding:10px 0;">{{ $contact->telephone ?: '—' }}</td>
                </tr>
                <tr>
                    <td style="padding:10px 0;color:#64748b;">Société</td>
                    <td style="padding:10px 0;">{{ $contact->societe ?: '—' }}</td>
                </tr>
                <tr>
                    <td style="padding:10px 0;color:#64748b;">Service</td>
                    <td style="padding:10px 0;">{{ $contact->service ? ucfirst(str_replace('-', ' ', $contact->service)) : '—' }}</td>
                </tr>
            </table>

            <hr style="border:0;border-top:1px solid #e2e8f0;margin:20px 0;">

            <p style="margin:0 0 8px;font-size:13px;color:#64748b;">Message</p>
            <p style="margin:0;font-size:15px;line-height:1.7;white-space:pre-line;">{{ $contact->message }}</p>

            <div style="margin-top:28px;">
                <a href="mailto:{{ $contact->email }}"
                   style="display:inline-block;background:#dc2626;color:#ffffff;text-decoration:none;font-weight:bold;font-size:14px;padding:12px 22px;border-radius:8px;">
                    Répondre au client
                </a>
            </div>

            <p style="margin:28px 0 0;font-size:12px;color:#94a3b8;">
                Reçu le {{ $contact->created_at->format('d/m/Y à H:i') }}
            </p>
        </div>
    </div>
</body>
</html>